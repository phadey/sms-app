<?php
App::uses('AppController', 'Controller');
/**
 * Stockins Controller
 *
 * @property Stockin $Stockin
 * @property PaginatorComponent $Paginator
 */
class StockinsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Stockin->recursive = 0;
		$this->set('stockins', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Stockin->exists($id)) {
			throw new NotFoundException(__('Invalid stockin'));
		}
		$options = array('conditions' => array('Stockin.' . $this->Stockin->primaryKey => $id));
		$this->set('stockin', $this->Stockin->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Stockin->create();
			if ($this->Stockin->save($this->request->data)) {
				$this->Session->setFlash(__('The stockin has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stockin could not be saved. Please, try again.'));
			}
		}
		$products = $this->Stockin->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Stockin->exists($id)) {
			throw new NotFoundException(__('Invalid stockin'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Stockin->save($this->request->data)) {
				$this->Session->setFlash(__('The stockin has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stockin could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Stockin.' . $this->Stockin->primaryKey => $id));
			$this->request->data = $this->Stockin->find('first', $options);
		}
		$products = $this->Stockin->Product->find('list');
		$this->set(compact('products'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Stockin->id = $id;
		if (!$this->Stockin->exists()) {
			throw new NotFoundException(__('Invalid stockin'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Stockin->delete()) {
			$this->Session->setFlash(__('The stockin has been deleted.'));
		} else {
			$this->Session->setFlash(__('The stockin could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
