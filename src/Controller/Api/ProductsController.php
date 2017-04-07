<?php
namespace App\Controller\Api;

use Cake\Controller\Component\RequestHandlerComponent;
/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 */
class ProductsController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 5,
        'maxLimit' => 15,
        'sortWhitelist' => [
            'id', 'name'
        ]
    ];
    // public function initialize()
    // {
    //     parent::initialize();
    //     $this->loadComponent('RequestHandler');
    //     $this->SetViewFormat('json');
    // }
    // /**
    //  * Index method
    //  *
    //  * @return \Cake\Network\Response|null
    //  */
    // public function index()
    // {
    //     $products = $this->paginate($this->Products);
    //
    //     $this->set(compact('products'));
    //     $this->set('_serialize', ['products']);
    // }
    //
    // /**
    //  * View method
    //  *
    //  * @param string|null $id Product id.
    //  * @return \Cake\Network\Response|null
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function view($id = null)
    // {
    //     $product = $this->Products->get($id, [
    //         'contain' => []
    //     ]);
    //
    //     $this->set('product', $product);
    //     $this->set('_serialize', ['product']);
    // }
    //
    // /**
    //  * Add method
    //  *
    //  * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
    //  */
    // public function add()
    // {
    //     //print_r($this->request->getData());die;
    //     $product = $this->Products->newEntity();
    //     if ($this->request->is('post')) {
    //         $product = $this->Products->patchEntity($product, $this->request->getData());
    //
    //         if ($this->Products->save($product)) {
    //             $this->set(compact('product'));
    //             $this->set('_serialize', ['product']);
    //         }else{
    //           $this->set('errors', 'The product could not be saved. Please, try again.');
    //           $this->set('_jsonOptions', JSON_FORCE_OBJECT);
    //           $this->set('_serialize', ['errors']);
    //         }
    //     }
    // }
    //
    // /**
    //  * Edit method
    //  *
    //  * @param string|null $id Product id.
    //  * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
    //  * @throws \Cake\Network\Exception\NotFoundException When record not found.
    //  */
    // public function edit($id = null)
    // {
    //     $product = $this->Products->get($id, [
    //         'contain' => []
    //     ]);
    //
    //     if ($this->request->is(['patch', 'post', 'put'])) {
    //         $product = $this->Products->patchEntity($product, $this->request->getData());
    //         if ($this->Products->save($product)) {
    //           $this->set(compact('product'));
    //           $this->set('success', 'The product has been edited..');
    //           $this->set('_jsonOptions', JSON_FORCE_OBJECT);
    //           $this->set('_serialize', ['success','product']);
    //         }else{
    //           $this->set('errors', 'The product could not be edited. Please, try again.');
    //           $this->set('_jsonOptions', JSON_FORCE_OBJECT);
    //           $this->set('_serialize', ['errors']);
    //         }
    //
    //     }
    //
    // }
    //
    // /**
    //  * Delete method
    //  *
    //  * @param string|null $id Product id.
    //  * @return \Cake\Network\Response|null Redirects to index.
    //  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
    //  */
    // public function delete($id = null)
    // {
    //     $this->request->allowMethod(['delete']);
    //     $product = $this->Products->get($id);
    //     if ($this->Products->delete($product)) {
    //         $this->set('success',__('The product has been deleted.'));
    //         $this->set('_jsonOptions', JSON_FORCE_OBJECT);
    //         $this->set('_serialize', ['success']);
    //     } else {
    //         $this->set('errors',__('The product could not be deleted. Please, try again.'));
    //         $this->set('_jsonOptions', JSON_FORCE_OBJECT);
    //         $this->set('_serialize', ['errors']);
    //     }
    //
    // }
    //
    // private function SetViewFormat($format = 'json'){
    //
    //   $format = strtolower($format);
    //
    //   // Format to view mapping
    //   $formats = [
    //   'xml' => 'Xml',
    //   'json' => 'Json',
    //   ];
    //
    //   // Error on unknown type
    //   if (!isset($formats[$format])) {
    //     throw new NotFoundException(__('Unknown format.'));
    //   }
    //
    //   // Set Out Format View
    //   $this->viewBuilder()->className($formats[$format]);
    //
    //   // Set Force Download
    //   //$this->response->download('report-' . date('YmdHis') . '.' . $format);
    // }
}
