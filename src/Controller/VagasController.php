<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Vagas Controller
 *
 * @property \App\Model\Table\VagasTable $Vagas
 * @method \App\Model\Entity\Vaga[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class VagasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Departamentos', 'Empresas', 'EstabelecimentosEmpresas', 'Setores'],
        ];
        $vagas = $this->paginate($this->Vagas);

        $this->set(compact('vagas'));
    }

    /**
     * View method
     *
     * @param string|null $id Vaga id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $vaga = $this->Vagas->get($id, [
            'contain' => ['Departamentos', 'Empresas', 'EstabelecimentosEmpresas', 'Setores'],
        ]);

        $this->set(compact('vaga'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $vaga = $this->Vagas->newEmptyEntity();
        if ($this->request->is('post')) {
            $vaga = $this->Vagas->patchEntity($vaga, $this->request->getData());
            if ($this->Vagas->save($vaga)) {
                $this->Flash->success(__('Vaga salva com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The vaga could not be saved. Please, try again.'));
        }
        $departamentos = $this->Vagas->Departamentos->find('list', ['limit' => 200])->all();
        $empresas = $this->Vagas->Empresas->find('list', ['limit' => 200])->all();
        $estabelecimentosEmpresas = $this->Vagas->EstabelecimentosEmpresas->find('list', ['limit' => 200])->all();
        $setores = $this->Vagas->Setores->find('list', ['limit' => 200])->all();
        $this->set(compact('vaga', 'departamentos', 'empresas', 'estabelecimentosEmpresas', 'setores'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Vaga id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $vaga = $this->Vagas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $vaga = $this->Vagas->patchEntity($vaga, $this->request->getData());
            if ($this->Vagas->save($vaga)) {
                $this->Flash->success(__('Vaga alterada com sucesso!'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Vaga não salva, tente novamente.'));
        }
        $departamentos = $this->Vagas->Departamentos->find('list', ['limit' => 200])->all();
        $empresas = $this->Vagas->Empresas->find('list', ['limit' => 200])->all();
        $estabelecimentosEmpresas = $this->Vagas->EstabelecimentosEmpresas->find('list', ['limit' => 200])->all();
        $setores = $this->Vagas->Setores->find('list', ['limit' => 200])->all();
        $this->set(compact('vaga', 'departamentos', 'empresas', 'estabelecimentosEmpresas', 'setores'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Vaga id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $vaga = $this->Vagas->get($id);
        $vaganome = $this->Vagas->get($id);
        if ($this->Vagas->delete($vaga)) {
            $this->Flash->success(__('Vaga "'. $vaganome->nome_vaga .'" excluida com sucesso!'));
        } else {
            $this->Flash->error(__('A vaga não pode ser excluída, tente novamente'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
