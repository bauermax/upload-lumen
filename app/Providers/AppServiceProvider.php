<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;

  public function boot()
  {
      Schema::defaultStringLength(191);
  }
}
