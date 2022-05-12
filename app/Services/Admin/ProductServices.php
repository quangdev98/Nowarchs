<?php
    namespace App\Services\Admin;

    use Illuminate\Support\Facades\Auth;
    use App\Helpers\Helpers;
    use Illuminate\Support\Facades\DB;
    use App\Repositories\Admin\Products\ProductRepositoryInterface;

    class ProductServices{

        private $productRepository;

        public function __construct(ProductRepositoryInterface $productRepository)
        {
            $this->productRepository = $productRepository;
        }

        public function index($data = []) {
            return $this->productRepository->index($data);
        }

        public function store($data) {
            $image = Helpers::HandleStoreImage(request()->file('images'),'products');
            if(!empty($data['number_sale'])){
                $sale = $data['number_sale'];
            } else{
                $sale = '';
            }
            $dataProduct = [
                'name' =>$data['name'],
                'slug' =>Helpers::Slug($data['name']),
                'images' =>$image,
                'number_sale' =>$sale,
                'price' =>$data['price'],
                'contents' =>$data['contents'],
                'status' =>$data['status'],
                'category_id' =>$data['category_id'],
            ];
            return $this->productRepository->store($dataProduct);
        }

        public function edit($id)
        {
            return $this->productRepository->edit($id);
        }

        public function update($data, $id) {
            $image = Helpers::HandleUploadedImage(request()->file('images'), 'products', 'products', $id);
            if(!empty($data['number_sale'])){
                $sale = $data['number_sale'];
            } else{
                $oldSale = DB::table('products')->where('id', $id)->first()->number_sale;
                if(!empty($oldSale)){
                     $sale = DB::table('products')->where('id', $id)->first()->number_sale;
                } else{
                    $sale = '';
                }
            }
            $data = [
                'name' =>$data['name'],
                'slug' =>Helpers::Slug($data['name']),
                'images' =>$image,
                'price' =>$data['price'],
                'number_sale' =>$sale,
                'contents' =>$data['contents'],
                'status' =>$data['status'],
                'category_id' =>$data['category_id'],
            ];
            return $this->productRepository->update($data, $id);
        }
        public function delete($id) {
            return $this->productRepository->delete($id);
        }

        public function show($id)
        {
            return $this->productRepository->show($id);
        }
    }
?>
