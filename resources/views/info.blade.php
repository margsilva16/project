
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><b>Informações Pessoais</b></div>
                <div class="card-body">

                    <?php
                    // $infos = App\User::all();
                    //$infos = App\User::where('id', auth()->user()->id)->get();

                    foreach ($info as $user) {
                        ?>
                        <ul style="list-style-type: none">
                            <li>Nome: <?php echo $user->name ?> </li>
                            <li>Apelido: <?php echo $user->surname ?> </li>
                            <li>Email: <?php echo $user->email ?> </li>

                        </ul>
                    <?php } ?>
                    </tr>

                    </tbody>
                    </table>
                    <a class="btn btn-primary" href="{{ url('change-password') }}">{{ __('Alterar Palavra-Passe') }}</a>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection


