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

        public function index($data = []) {
            return $this->categoryRepository->index($data);
        }

        public function store($data) {
            $data = [
                'name' => $data['name']
            ];
            return $this->categoryRepository->store($data);
        }

        public function update($data, $id)
        {
            $data = [
                'name' => $data['name']
            ];
            return $this->categoryRepository->update($data, $id);
        }

        public function delete($id)
        {
            return $this->categoryRepository->delete($id);
        }

        public function formStatus($data)
        {
            return $this->categoryRepository->formStatus($data);
        }
    }
?>
