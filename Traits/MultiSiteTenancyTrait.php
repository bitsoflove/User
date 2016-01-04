<?php namespace Modules\User\Traits;

use Modules\Site\Facades\SiteGateway;
use \Site;

trait MultiSiteTenancyTrait {

    public function newQuery()
    {
        $query = parent::newQuery();
        if (is_module_enabled('Site')) {
            $this->appendWhereClause($query);
        }

        return $query;
    }

    private function appendWhereClause($query) {
      $siteId = Site::id();
      if(!empty($siteId)) {
          $query->whereHas('sites', function($q) use ($siteId) {
              $q->where('id', $siteId);
          });
      }
    }
}
