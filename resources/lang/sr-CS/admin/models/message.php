<?php

return array(

    'does_not_exist' => 'Model ne postoji.',
    'no_association' => 'NEMA POVEZANOG MODELA.',
    'no_association_fix' => 'Ovo će polomiti stvari na čudne i užasne načine. Uredite odmah ovu imovinu da bi ste je povezali sa modelom.',
    'assoc_users'	 => 'Ovaj je model trenutno povezan s jednom ili više imovina i ne može se izbrisati. Izbrišite imovinu pa pokušajte ponovo. ',


    'create' => array(
        'error'   => 'Model nije kreiran, pokušajte ponovo.',
        'success' => 'Model je uspešno kreiran.',
        'duplicate_set' => 'Model imovine s tim nazivom, proizvođačem i brojem modela već postoji.',
    ),

    'update' => array(
        'error'   => 'Model nije ažuriran, pokušajte ponovo',
        'success' => 'Model je uspešno ažuriran.',
    ),

    'delete' => array(
        'confirm'   => 'Jeste li sigurni da želite izbrisati ovaj model imovine?',
        'error'   => 'Došlo je do problema s brisanjem modela. Molim pokušajte ponovo.',
        'success' => 'Model je uspešno izbrisan.'
    ),

    'restore' => array(
        'error'   		=> 'Model nije obnovljen, pokušajte ponovo',
        'success' 		=> 'Model je uspešno obnovljen.'
    ),

    'bulkedit' => array(
        'error'   		=> 'Polja nisu menjana, tako da ništa nije ažurirano.',
        'success' 		=> 'Model successfully updated. |:model_count models successfully updated.',
        'warn'          => 'You are about to update the properies of the following model: |You are about to edit the properties of the following :model_count models:',

    ),

    'bulkdelete' => array(
        'error'   		    => 'Nijedan model nije odabran, tako da ništa nije izbrisano.',
        'success' 		    => 'Model deleted!|:success_count models deleted!',
        'success_partial' 	=> ':success_count model(s) were deleted, however :fail_count were unable to be deleted because they still have assets associated with them.'
    ),

);
