<form action="{{ route('front.search') }}" method="post">
    @csrf
    <div class="row g-3">
        <div class="col-lg-5 col-md-12">
            <div class="">
                <select class=" selectpicker " name="category_id" data-width="100%" data-size="5" data-live-search="true">
                    <option disabled selected>@lang('Select a category')</option>
                    @foreach ($categories as $category)
                        <option @selected(request()->category_id == $category->id) value="{{ $category->id }}">
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-5 col-md-12">
            <div class="form-group search-category ">
                <input type="search" value="{{ request()->search ?? '' }}" name="search"
                    class="form-control p-3 datetimepicker selectpicker" placeholder="nom_de_l'évènement">

            </div>
        </div>
        <div class="col-lg-2 col-md-12">
            <button type="submit" class="main-btn btn-hover w-100">Rechercher</button>

        </div>
    </div>
</form>
