<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Professores Controller
 *
 * @property \App\Model\Table\ProfessoresTable $Professores
 * @method \App\Model\Entity\Professore[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ProfessoresController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $professores = $this->paginate($this->Professores);

        $this->set(compact('professores'));
    }

    /**
     * View method
     *
     * @param string|null $id Professore id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $professore = $this->Professores->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('professore'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $professore = $this->Professores->newEmptyEntity();
        if ($this->request->is('post')) {
            $professore = $this->Professores->patchEntity($professore, $this->request->getData());
            if ($this->Professores->save($professore)) {
                $this->Flash->success(__('The professore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The professore could not be saved. Please, try again.'));
        }
        $this->set(compact('professore'));

        //recupera todos os diplomas
        $diplomas = $this->loadModel('Diplomas');
        $diplomas = $this->Diplomas->find()->all();
        $this->set('Diplomas', $diplomas);
    }

    /**
     * Edit method
     *
     * @param string|null $id Professore id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $professore = $this->Professores->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $professore = $this->Professores->patchEntity($professore, $this->request->getData());
            if ($this->Professores->save($professore)) {
                $this->Flash->success(__('The professore has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The professore could not be saved. Please, try again.'));
        }
        $this->set(compact('professore'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Professore id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $professore = $this->Professores->get($id);
        if ($this->Professores->delete($professore)) {
            $this->Flash->success(__('The professore has been deleted.'));
        } else {
            $this->Flash->error(__('The professore could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
