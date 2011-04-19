<?php
class BooksController extends AppController {

	var $name = 'Books';
	var $components = array('Image'); 
	var $paginate = array('limit' => 12);

	function beforeFilter(){
		$this->Auth->allow(array('search','view', 'sellbooks', 'sell'));
		$this->_paginatorURL();
	 
	}

	function index() {
		$this->Book->recursive = 0;
		$this->set('books', $this->paginate());
	}
	
	function search() {
		$query = $this->params['url']['q'];
		$this->set('query',$query);
		$this->set('books', $this->paginate('Book',
			array('OR' => array('Book.title LIKE' => "%$query%", 		'Book.author LIKE' => "%$query%", 'isbn LIKE' => "%$query%" ))
					)
			);
			
	}

	function sell() {
		$query = $this->params['url']['isbn'];
		$this->set('query',$query);
		$this->set('books', $this->paginate('Book',array('Book.isbn' => $query)));
	}
	
	function addtocart($id = null){
		if (!$id) {
			$this->Session->setFlash(__('Invalid url', true));
			$this->redirect(array('controller' => 'home','action' => 'index'));
		}
		$this->set('book', $this->Book->read(null, $id));		
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid book', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('book', $this->Book->read(null, $id));
	}

	function add() {
		$this->__setBookUploadPath();
		if (!empty($this->data)) {
			$this->Book->create();
		
			//upload the book cover image		
			$filename = $this->Image->upload_image('Book.coverpage');
			if($filename){
				$this->Book->set('bookcover', $filename['filename']);
			}
			
			//create the book cover image	thumbnail	
			$this->Image->width = 120;
			$this->Image->height = 120;
			$filename_thumb = $this->Image->thumb($filename['filepath']);
			
			if($filename_thumb){
				$this->Book->set('bookcoverthumb', $filename_thumb['filename']);
			}
			
			if ($this->Book->save($this->data)) {				
				$this->Session->setFlash(__('The book has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid book', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			
			$this->__setBookUploadPath();
			
			//upload the book cover image		
			$filename = $this->Image->upload_image('Book.coverpage');
			if($filename){
				$this->data['Book']['bookcover'] = $filename['filename'];
			}
			
			//create the book cover image	thumbnail	
			$this->Image->width = 120;
			$this->Image->height = 120;
			$filename_thumb = $this->Image->thumb($filename['filepath']);
			
			if($filename_thumb){
				$this->data['Book']['bookcoverthumb'] = $filename_thumb['filename'];
			}
			
			if ($this->Book->save($this->data)) {
				//$this->Session->setFlash(__('The book has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.', true));
			}
		}
		
		if (empty($this->data)) {
			$this->data = $this->Book->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for book', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Book->delete($id)) {
			$this->Session->setFlash(__('Book deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Book was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function sellbooks(){
		
	}
	
	function __setBookUploadPath(){
		$this->Image->set_paths(WWW_ROOT . 'img/upload/', WWW_ROOT . 'img/thumb/');
	}
}
?>