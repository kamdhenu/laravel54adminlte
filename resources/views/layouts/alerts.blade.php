@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(session()->has('alert-' . $msg))
        <div class="alert alert-{{ $msg }} alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            {!! session()->get('alert-' . $msg) !!} {{--This syntax allows HTML in alert messages--}}
        </div>
    @endif
@endforeach

{{--
You can set your alert message as below:

session()->flash('alert-success', 'Your success message');
session()->flash('alert-warning', 'Your warning message');
...
--}}
