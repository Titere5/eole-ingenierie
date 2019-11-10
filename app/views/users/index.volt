{{ content() }}

<h2>Liste des utilisateurs</h2>
<p>Il y a
    <b>{{users|length}}
    </b>
    utilisateurs inscrits sur votre site
</p>
{{ link_to("users/display","Liste des utilisateurs inscrits sur votre site avec leurs informations") }}
