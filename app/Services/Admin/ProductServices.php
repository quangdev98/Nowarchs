<?php
    namespace App\Services\Admin;
    
    use Illuminate\Support\Facades\Auth;
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
    }
?>
