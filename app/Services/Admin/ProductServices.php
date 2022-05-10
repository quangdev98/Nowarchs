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

        public function index() {
            return $this->productRepository->index();
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
            // dd($data);
            return $this->productRepository->store($dataProduct);
        }
    }
?>
