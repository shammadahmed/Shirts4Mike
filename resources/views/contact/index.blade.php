@extends('master')

@section('content')

    <div class="section page">

        <div class="wrapper">

            <h1>Contact</h1>

            <p>I&rsquo;d love to hear from you! Complete the form to send me an email.</p>

            @if($errors->any())

                <ul class="message">

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            @endif


            {!! Form::open(['method' => 'POST', 'url' => url('contact')]) !!}

                <table>
                    <tr>
                        <th>
                            {!! Form::label('name', 'Name') !!}
                        </th>
                        <td>
                            {!! Form::text('name', old('name'), ['id' => 'name']) !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {!! Form::label('email', 'Email') !!}
                        </th>
                        <td>
                            {!! Form::text('email', old('email'), ['id' => 'email']) !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {!! Form::label('message', 'Message') !!}
                        </th>
                        <td>
                            {!! Form::textarea('message', old('message'), ['id' => 'message', 'size' => '30x2']) !!}
                        </td>
                    </tr> 
                    <tr style="display: none;">
                        <th>
                            {!! Form::label('address', 'Address') !!}
                        </th>
                        <td>
                            {!! Form::text('address', null, ['id' => 'address']) !!}
                            <p>Humans (and frogs): please leave this field blank.</p>
                        </td>
                    </tr>                   
                </table>
                {!! Form::submit('Send') !!}

            {!! Form::close() !!}

        </div>

    </div>

@endsection