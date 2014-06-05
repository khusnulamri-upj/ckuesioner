<?php
class KuesionersController extends AppController {
    public $helpers = array('Html', 'Form', 'Text');

    public function index() {
        $this->set('kuesioners', $this->Kuesioner->find('all'));
    }
	
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Kuesioner tidak ada'));
        }

        $kuesioner = $this->Kuesioner->findById($id);
        if (!$kuesioner) {
            throw new NotFoundException(__('Kuesioner tidak ada'));
        }
        $this->set('kuesioner', $kuesioner);
    }
	
    public function add() {
        if ($this->request->is('post')) {
            $this->Kuesioner->create();
            if ($this->Kuesioner->save($this->request->data)) {
                $this->Session->setFlash(__('Kuesioner telah disimpan.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Kuesioner tidak dapat disimpan.'));
        }
    }
    
    public function edit($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Kuesioner tidak ada'));
        }

        $kuesioner = $this->Kuesioner->findById($id);
        if (!$kuesioner) {
            throw new NotFoundException(__('Kuesioner tidak ada'));
        }

        if ($this->request->is(array('post', 'put'))) {
            $this->Kuesioner->id = $id;
            if ($this->Kuesioner->save($this->request->data)) {
                $this->Session->setFlash(__('Kuesioner telah diubah.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Kuesioner tidak dapat diubah.'));
        }

        if (!$this->request->data) {
            $this->request->data = $kuesioner;
        }
    }
    
    public function delete($id) {
        /*  AMRNOTE
         *  1. pengecekan apakah kuesioner telah dipakai (ada data responden yang memakai kuesioner ini)
         */
        if ($this->request->is('get')) {
            throw new MethodNotAllowedException();
        }

        if ($this->Kuesioner->delete($id)) {
            $this->Session->setFlash(
                __('Kuesioner %s telah dihapus.', h($id))
            );
            return $this->redirect(array('action' => 'index'));
        }
    }
}