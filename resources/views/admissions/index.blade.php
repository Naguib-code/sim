<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admission') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class=" mx-auto sm:px-2 ">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">

                {{--    <!-- debut  jumbotron  -->--}}

                <div class="jumbotron jumbotron-fluid" style="background-image: url('https://img.huffingtonpost.com/asset/5c92ce4d240000320004e9cd.jpeg?ops=scalefit_720_noupscale'); height: 100%;background-repeat: no-repeat;background-size: cover;">
                    <div class="container">
                        <h1 class="display-4">Service churigical </h1>
                        <p class="lead">Ceci est votre tableau de bord dans laquel vous avez la formulaire d'admission du patient.</p>
                    </div>
                </div>

                <!-- fin jumbotron -->

                <div class="row ml-1">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-right">
                            <a class="btn btn-success" href="{{route('admissions.create')}}" title="Create a project"><i class="fas fa-plus-circle"></i> Ajouter un patient</a>
                        </div>
                    </div>
                </div>


                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif


                <table id="example" class="table table-striped table-bordered mt-2" style="width:100%" data-search="true">
                    <thead class="thead-dark">

                    <tr class="text-center">
                        <th>No</th>
                        <th>Nom complet</th>
                        <th>age</th>
                        <th>Sexe</th>
                        <th>Adresse</th>
                        <th>Nationalité</th>
                        <th>Status</th>
                        <th>Motif d'admission</th>
                        <th>Date d'admission</th>
                        <th>Diagnostic principal</th>
                        <th>N lit</th>
                        <th>Date de sortie</th>
                        <th>Mode de sortie</th>
                        <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($admissions as $ad)
                        <tr class="text-center">
                            <td>{{ $ad->id }}</td>
                            <td>{{ $ad->nom_complet }}</td>
                            <td>{{ $ad->age }}</td>
                            <td>{{ $ad->sexe }}</td>
                            <td>{{ $ad->adresse }}</td>
                            <td>{{ $ad->nationalite }}</td>
                            <td>{{ $ad->status }}</td>
                            <td>{{ $ad->motif_admission }}</td>
                            <td>{{ $ad->date_admission }}</td>
                            <td>{{ $ad->diag_principal }}</td>
                            <td>{{ $ad->nlit }}</td>
                            <td>{{ $ad->date_sortie }}</td>
                            <td>{{ $ad->mode_sortie}}</td>
                            <td>
                                <form action="{{ route('admissions.destroy', $ad->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" title="delete" class="btn btn-danger"><i class="fas fa-user-times"></i></button></td>
                            </form>
                            </td>
{{--                            <td><a class="btn btn-primary" title="show" href="#" role="button"><i class="fas fa-eye"></i></a></td>--}}
                            <td><a class="btn btn-primary" href="{{ route('admissions.edit',$ad->id) }}" role="button"><i class="fas fa-user-edit"></i></a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>

</x-app-layout>
