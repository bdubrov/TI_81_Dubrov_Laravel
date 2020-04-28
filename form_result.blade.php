@if(isset($user))
    <H1>Реєстрація пройшла успішно</H1>
    @foreach($user as $key => $value)
        <H3>{{$key." => ".$value}}</H3>
    @endforeach
@else
    <H1>Реєстрація невдала</H1>
@endif
