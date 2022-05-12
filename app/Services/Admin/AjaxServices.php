<?php
    namespace App\Services\Admin;

    use Illuminate\Support\Facades\Auth;
    use App\Helpers\Helpers;
    use App\Repositories\Admin\Ajax\AjaxRepositoryInterface;

    class AjaxServices{

        private $ajaxRepository;

        public function __construct(AjaxRepositoryInterface $ajaxRepository)
        {
            $this->ajaxRepository = $ajaxRepository;
        }

        public function formStatus($data)
        {
            return $this->ajaxRepository->formStatus($data);
        }

        public function filterProduct($data)
        {
            return $this->ajaxRepository->filterProduct($data);
        }
    }
?>
