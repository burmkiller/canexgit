<div id="categories" class="container padding-y">
    <p class="font-weight-bold text-justify font-secondary">
      {{trans("home.cat_msg")}}
    </p>
    <div class="row">
        @foreach(getAllCategories() as $category)
        <div class="col-lg-6 p-2">
            <div class="category py-2 px-3">
                <a href="{{url("category/$category->slug")}}"><i class="fas fa-plus-circle mr-2 text-success"></i>
                    {{App::isLocale('fr')? $category->name_fr:$category->name_en}}
                </a>
            </div>
        </div>
        @endforeach

        <div class="col-lg-6 p-2">
            <div class="category py-2 px-3">
                <a href="{{url("page/how-these-business-categories-came-about")}}"><i class="fas fa-plus-circle mr-2 text-success"></i><span class="text-red"> {{trans("nav_bar.hbc")}}</span></a>
            </div>
        </div>
    </div>
</div>
