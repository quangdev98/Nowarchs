<?php
    namespace App\Services\Admin;
    
    use Illuminate\Support\Facades\Auth;
    use App\Repositories\Admin\Categories\CategoryRepositoryInterface;

    class CategoryServices{

        private $categoryRepository;

        public function __construct(CategoryRepositoryInterface $categoryRepository)
        {
            $this->categoryRepository = $categoryRepository;
        }

        public function index() {
            return $this->categoryRepository->index();
        }
    }
?>
