<div class="{{$viewClass['form-group']}} {!! !$errors->has($errorKey) ? '' : 'has-error' !!}">

    <label for="{{$id['latitude']}}" class="{{$viewClass['label']}} control-label">{{$label}}</label>

    <div class="{{$viewClass['field']}}">

        @include('admin::form.error')

        <div class="row">
            <div class="col-md-3">
                <input id="{{$id['longitude']}}" name="{{$name['longitude']}}" class="form-control" value="{{ old($column['longitude'], $value['longitude']) }}" {!! $attributes !!} />
            </div>
            <div class="col-md-3">
                <input id="{{$id['latitude']}}" name="{{$name['latitude']}}" class="form-control" value="{{ old($column['latitude'], $value['latitude']) }}" {!! $attributes !!} />
            </div>

            @if($provider != 'yandex')
            <div class="col-md-3 col-md-offset-3">
                <div class="input-group">
                    <input type="text" class="form-control" id="search-{{$id['latitude'].$id['longitude']}}">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-info btn-flat"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </div>
            @endif

        </div>

        <br>

        <div id="map_{{$id['latitude'].$id['longitude']}}" style="width: 100%;height: {{ $height }}px"></div>

        @include('admin::form.help-block')

    </div>
</div>
