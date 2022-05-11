<?php
    namespace App\Services\Admin;

    use Illuminate\Support\Facades\Auth;
    use App\Helpers\Helpers;
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
            $dataProduct = [
                'name' =>$data['name'],
                'slug' =>Helpers::Slug($data['name']),
                'images' =>$image,
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
            $data = [
                'name' =>$data['name'],
                'slug' =>Helpers::Slug($data['name']),
                'images' =>$image,
                'price' =>$data['price'],
                'contents' =>$data['contents'],
                'status' =>$data['status'],
                'category_id' =>$data['category_id'],
            ];
            return $this->productRepository->update($data, $id);
        }
        public function delete($id) {
            return $this->productRepository->delete($id);
        }
    }
?>
