<?php
App::uses('AppController', 'Controller');
/**
 * Stockouts Controller
 *
 * @property Stockout $Stockout
 * @property PaginatorComponent $Paginator
 */
class StockoutsController extends AppController {

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
		$this->Stockout->recursive = 0;
		$this->set('stockouts', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Stockout->exists($id)) {
			throw new NotFoundException(__('Invalid stockout'));
		}
		$options = array('conditions' => array('Stockout.' . $this->Stockout->primaryKey => $id));
		$this->set('stockout', $this->Stockout->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Stockout->create();
			if ($this->Stockout->save($this->request->data)) {
				$this->Session->setFlash(__('The stockout has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stockout could not be saved. Please, try again.'));
			}
		}
		$products = $this->Stockout->Product->find('list');
		$salesorders = $this->Stockout->Salesorder->find('list');
		$this->set(compact('products', 'salesorders'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Stockout->exists($id)) {
			throw new NotFoundException(__('Invalid stockout'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Stockout->save($this->request->data)) {
				$this->Session->setFlash(__('The stockout has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stockout could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Stockout.' . $this->Stockout->primaryKey => $id));
			$this->request->data = $this->Stockout->find('first', $options);
		}
		$products = $this->Stockout->Product->find('list');
		$salesorders = $this->Stockout->Salesorder->find('list');
		$this->set(compact('products', 'salesorders'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Stockout->id = $id;
		if (!$this->Stockout->exists()) {
			throw new NotFoundException(__('Invalid stockout'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Stockout->delete()) {
			$this->Session->setFlash(__('The stockout has been deleted.'));
		} else {
			$this->Session->setFlash(__('The stockout could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
