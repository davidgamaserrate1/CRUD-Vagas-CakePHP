<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * VagasLogs Controller
 *
 * @property \App\Model\Table\VagasLogsTable $VagasLogs
 * @method \App\Model\Entity\VagasLog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VagasLogsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $vagasLogs = $this->paginate($this->VagasLogs);

        $this->set(compact('vagasLogs'));
    }

    /**
     * View method
     *
     * @param string|null $id Vagas Log id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vagasLog = $this->VagasLogs->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('vagasLog'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vagasLog = $this->VagasLogs->newEmptyEntity();
        if ($this->request->is('post')) {
            $vagasLog = $this->VagasLogs->patchEntity($vagasLog, $this->request->getData());
            if ($this->VagasLogs->save($vagasLog)) {
                $this->Flash->success(__('The vagas log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vagas log could not be saved. Please, try again.'));
        }
        $this->set(compact('vagasLog'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vagas Log id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vagasLog = $this->VagasLogs->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vagasLog = $this->VagasLogs->patchEntity($vagasLog, $this->request->getData());
            if ($this->VagasLogs->save($vagasLog)) {
                $this->Flash->success(__('The vagas log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vagas log could not be saved. Please, try again.'));
        }
        $this->set(compact('vagasLog'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vagas Log id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vagasLog = $this->VagasLogs->get($id);
        if ($this->VagasLogs->delete($vagasLog)) {
            $this->Flash->success(__('The vagas log has been deleted.'));
        } else {
            $this->Flash->error(__('The vagas log could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
