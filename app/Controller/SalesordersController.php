<?php
App::uses('AppController', 'Controller');
/**
 * Salesorders Controller
 *
 * @property Salesorder $Salesorder
 * @property PaginatorComponent $Paginator
 */
class SalesordersController extends AppController {

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
		$this->Salesorder->recursive = 0;
		$this->set('salesorders', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Salesorder->exists($id)) {
			throw new NotFoundException(__('Invalid salesorder'));
		}
		$options = array('conditions' => array('Salesorder.' . $this->Salesorder->primaryKey => $id));
		$this->set('salesorder', $this->Salesorder->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Salesorder->create();
			if ($this->Salesorder->save($this->request->data)) {
				$this->Session->setFlash(__('The salesorder has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salesorder could not be saved. Please, try again.'));
			}
		}
		$invoices = $this->Salesorder->Invoice->find('list');
		$this->set(compact('invoices'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Salesorder->exists($id)) {
			throw new NotFoundException(__('Invalid salesorder'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Salesorder->save($this->request->data)) {
				$this->Session->setFlash(__('The salesorder has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The salesorder could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Salesorder.' . $this->Salesorder->primaryKey => $id));
			$this->request->data = $this->Salesorder->find('first', $options);
		}
		$invoices = $this->Salesorder->Invoice->find('list');
		$this->set(compact('invoices'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Salesorder->id = $id;
		if (!$this->Salesorder->exists()) {
			throw new NotFoundException(__('Invalid salesorder'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Salesorder->delete()) {
			$this->Session->setFlash(__('The salesorder has been deleted.'));
		} else {
			$this->Session->setFlash(__('The salesorder could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
