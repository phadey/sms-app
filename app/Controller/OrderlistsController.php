<?php
App::uses('AppController', 'Controller');
/**
 * Orderlists Controller
 *
 * @property Orderlist $Orderlist
 * @property PaginatorComponent $Paginator
 */
class OrderlistsController extends AppController {

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
		$this->Orderlist->recursive = 0;
		$this->set('orderlists', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Orderlist->exists($id)) {
			throw new NotFoundException(__('Invalid orderlist'));
		}
		$options = array('conditions' => array('Orderlist.' . $this->Orderlist->primaryKey => $id));
		$this->set('orderlist', $this->Orderlist->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Orderlist->create();
			if ($this->Orderlist->save($this->request->data)) {
				$this->Session->setFlash(__('The orderlist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orderlist could not be saved. Please, try again.'));
			}
		}
		$products = $this->Orderlist->Product->find('list');
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
		if (!$this->Orderlist->exists($id)) {
			throw new NotFoundException(__('Invalid orderlist'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Orderlist->save($this->request->data)) {
				$this->Session->setFlash(__('The orderlist has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orderlist could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Orderlist.' . $this->Orderlist->primaryKey => $id));
			$this->request->data = $this->Orderlist->find('first', $options);
		}
		$products = $this->Orderlist->Product->find('list');
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
		$this->Orderlist->id = $id;
		if (!$this->Orderlist->exists()) {
			throw new NotFoundException(__('Invalid orderlist'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Orderlist->delete()) {
			$this->Session->setFlash(__('The orderlist has been deleted.'));
		} else {
			$this->Session->setFlash(__('The orderlist could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
