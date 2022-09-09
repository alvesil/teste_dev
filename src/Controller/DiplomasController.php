<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Diplomas Controller
 *
 * @property \App\Model\Table\DiplomasTable $Diplomas
 * @method \App\Model\Entity\Diploma[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DiplomasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $diplomas = $this->paginate($this->Diplomas);

        $this->set(compact('diplomas'));
    }

    /**
     * View method
     *
     * @param string|null $id Diploma id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diploma = $this->Diplomas->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('diploma'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diploma = $this->Diplomas->newEmptyEntity();
        if ($this->request->is('post')) {
            $diploma = $this->Diplomas->patchEntity($diploma, $this->request->getData());
            if ($this->Diplomas->save($diploma)) {
                $this->Flash->success(__('The diploma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The diploma could not be saved. Please, try again.'));
        }
        $this->set(compact('diploma'));
        
    }

    /**
     * Edit method
     *
     * @param string|null $id Diploma id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diploma = $this->Diplomas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diploma = $this->Diplomas->patchEntity($diploma, $this->request->getData());
            if ($this->Diplomas->save($diploma)) {
                $this->Flash->success(__('The diploma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The diploma could not be saved. Please, try again.'));
        }
        $this->set(compact('diploma'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Diploma id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diploma = $this->Diplomas->get($id);
        if ($this->Diplomas->delete($diploma)) {
            $this->Flash->success(__('The diploma has been deleted.'));
        } else {
            $this->Flash->error(__('The diploma could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
