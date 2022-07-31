<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Poids Controller
 *
 * @property \App\Model\Table\PoidsTable $Poids
 * @method \App\Model\Entity\Poid[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PoidsController extends AppController
{
    public function post(){
        $this->viewBuilder()->setLayout('ajax');
        $this->loadModel('User');
        $userid=$this->request->getData('userid');
        $kg=$this->request->getData('kg');
        $datePesee=$this->request->getData('datepesee');
        $queryUser=$this->User->find('all')->where(['uuid'=>$userid])->first();
        $querysPoids=$this->Poids->find('all')->where(['userid'=> $queryUser->id,"datePesee" =>$datePesee]);
        if($querysPoids->count()>0){
            //Update
            $query = $this->Poids->query();
            $query->update()
                ->set([
                    'userid'=> $queryUser->id,
                    'datepesee' => $datePesee,
                    'kg' => $kg
                    ])
                ->where(['userid'=> $queryUser->id,"datePesee" =>$datePesee])
                ->execute();
                echo "ok";
        }
        else{
            //Create
            $query = $this->Poids->query();
            $query->insert(['userid', 'datepesee','kg'])
                ->values([
                    'userid' => $queryUser->id,
                    'datepesee' => $datePesee,
                    'kg' => $kg,
                ])
                ->execute();
                echo "ok";
        }
    }

    public function get(){
        $this->viewBuilder()->setLayout('ajax');
        $this->loadModel('User');
        $userid=$this->request->getData('userid');
        //$userid=$this->request->getQuery('userid');
        
        $queryUser=$this->User->find('all')->where(['uuid'=>$userid])->first();
        $querysPoids=$this->Poids->find('all')->where(['userid'=> $queryUser->id]);
        return $this->response->withType("application/json")->withStringBody(json_encode($querysPoids));
    }

    public function index()
    {
        $poids = $this->paginate($this->Poids);

        $this->set(compact('poids'));
    }

    public function view($id = null)
    {
        $poid = $this->Poids->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('poid'));
    }


    public function add()
    {
        $poid = $this->Poids->newEmptyEntity();
        if ($this->request->is('post')) {
            $poid = $this->Poids->patchEntity($poid, $this->request->getData());
            if ($this->Poids->save($poid)) {
                $this->Flash->success(__('The poid has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The poid could not be saved. Please, try again.'));
        }
        $this->set(compact('poid'));
    }

    public function edit($id = null)
    {
        $poid = $this->Poids->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $poid = $this->Poids->patchEntity($poid, $this->request->getData());
            if ($this->Poids->save($poid)) {
                $this->Flash->success(__('The poid has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The poid could not be saved. Please, try again.'));
        }
        $this->set(compact('poid'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $poid = $this->Poids->get($id);
        if ($this->Poids->delete($poid)) {
            $this->Flash->success(__('The poid has been deleted.'));
        } else {
            $this->Flash->error(__('The poid could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
