<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * EstabelecimentosEmpresas Controller
 *
 * @property \App\Model\Table\EstabelecimentosEmpresasTable $EstabelecimentosEmpresas
 * @method \App\Model\Entity\EstabelecimentosEmpresa[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EstabelecimentosEmpresasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $estabelecimentosEmpresas = $this->paginate($this->EstabelecimentosEmpresas);

        $this->set(compact('estabelecimentosEmpresas'));
    }

    /**
     * View method
     *
     * @param string|null $id Estabelecimentos Empresa id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estabelecimentosEmpresa = $this->EstabelecimentosEmpresas->get($id, [
            'contain' => ['Empresas', 'Vagas'],
        ]);

        $this->set(compact('estabelecimentosEmpresa'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estabelecimentosEmpresa = $this->EstabelecimentosEmpresas->newEmptyEntity();
        if ($this->request->is('post')) {
            $estabelecimentosEmpresa = $this->EstabelecimentosEmpresas->patchEntity($estabelecimentosEmpresa, $this->request->getData());
            if ($this->EstabelecimentosEmpresas->save($estabelecimentosEmpresa)) {
                $this->Flash->success(__('The estabelecimentos empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estabelecimentos empresa could not be saved. Please, try again.'));
        }
        $this->set(compact('estabelecimentosEmpresa'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estabelecimentos Empresa id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estabelecimentosEmpresa = $this->EstabelecimentosEmpresas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estabelecimentosEmpresa = $this->EstabelecimentosEmpresas->patchEntity($estabelecimentosEmpresa, $this->request->getData());
            if ($this->EstabelecimentosEmpresas->save($estabelecimentosEmpresa)) {
                $this->Flash->success(__('The estabelecimentos empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estabelecimentos empresa could not be saved. Please, try again.'));
        }
        $this->set(compact('estabelecimentosEmpresa'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estabelecimentos Empresa id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estabelecimentosEmpresa = $this->EstabelecimentosEmpresas->get($id);
        if ($this->EstabelecimentosEmpresas->delete($estabelecimentosEmpresa)) {
            $this->Flash->success(__('The estabelecimentos empresa has been deleted.'));
        } else {
            $this->Flash->error(__('The estabelecimentos empresa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
