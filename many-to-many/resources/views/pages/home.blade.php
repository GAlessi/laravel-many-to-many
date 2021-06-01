@extends('layouts.main-layout')
@section('content')
    <main class="home">
        <h1>Employees:</h1>
        <ul>
            @foreach ($employees as $employee)
                <li class="employee">

                    <h2>
                        {{$employee -> firstname}}
                        {{$employee -> lastname}}
                    </h2>

                    <h3>
                        {{$employee -> location -> state}}
                    </h3>

                    <address>
                        {{$employee -> location -> street}}
                    </address>

                    <h3>Tasks:</h3>
                    <ul>
                        @foreach ($employee->tasks as $task )
                            <li class="tasks">
                                {{$task -> name}}
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>

    </main>
@endsection
