@extends('admissions.layout')

<nav class="navbar navbar-dark bg-dark">
    <span class="navbar-brand mb-0 h1"><a class="btn btn-primary" role="button" href="{{ route('admissions.index') }}"><i class="fas fa-chevron-left"></i> Revenir</a> </span>
</nav>

@section('content')

    <!-- debut tab nav -->
    <div class="card push-top">
        <div class="card-header">
            Ajouter un patient
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br />
        @endif

        <!-- Formulaire -->

            <form method="post" action="{{ route('admissions.store') }}">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        @csrf
                        <label for="nom_complet">Nom complet</label>
                        <input type="text" class="form-control" name="nom_complet">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="age">Age :</label>
                        <input type="number" class="form-control" placeholder="Entrer l'age" name="age">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="sexe">Sexe :</label>
                        <select class="custom-select" name="sexe">
                            <option selected value="masculin">Masculin</option>
                            <option value="feminin">Feminin </option>
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="adresse">Adresse :</label>
                        <input type="text" class="form-control" placeholder="Entrer l'adresse" name="adresse">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="nationalite">Nationalité :</label>
                        <input type="text" class="form-control" placeholder="Entrer la nationalite" name="nationalite">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="nlit">Num lit :</label>
                        <input type="number" class="form-control" placeholder="Entrer le numero de lit" name="nlit">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="status">Status du patient :</label>
                        <input type="text" class="form-control" placeholder="Entrer le status du patient" name="status">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="motif_admission">Motif d'admission :</label>
                        <input type="text" class="form-control" placeholder="Entrer le motif d'admission" name="motif_admission">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="date_admission">Date d'admission :</label>
                        <input type="date" class="form-control" placeholder="Entrer la date d'admission" name="date_admission">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="diag_principal">Diagnostic principal :</label>
                        <input type="text" class="form-control" placeholder="Entrer le diagnostic principal" name="diag_principal">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="date_sortie">Date de sortie :</label>
                        <input type="date" class="form-control" placeholder="Entrer la date de sortie" name="date_sortie">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="mode_sortie">Mode de sortie :</label>
                        <input type="text" class="form-control" placeholder="Entrer le mode de sortie" name="mode_sortie">
                    </div>
                    <div class="form-group col-md-6">
                        <button type="submit" class="btn btn-block btn-primary">Ajouter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

