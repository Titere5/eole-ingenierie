
{{ content() }}

<div class="page-header">
    <h1 style="color:blue;">Modifier un produit</h1>
</div>
{{ produit.id_Produit }}
{{ form('products/save', 'id': 'productForm', 'onbeforesubmit': 'return false') }}

    <fieldset>


       <input type="hidden" id="id_Produit" name="id_Produit" value="{{produit.id_Produit}}">

        <div class="control-group">
            {{ form.label('nom_Produit', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('nom_Produit', ['class': 'form-control']) }}
                <p class="help-block"></p>
                <div class="alert alert-warning" id="nom_alert">
                    Veuillez entrez le nom du produit
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('prix_Produit', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('prix_Produit', ['class': 'form-control']) }}
                <p class="help-block">(requis)</p>
                <div class="alert alert-warning" id="prix_alert">
                     Veuillez entrez le prix du produit.
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('descri_Produit', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('descri_Produit', ['class': 'form-control']) }}
                <p class="help-block">(requis)</p>
                <div class="alert alert-warning" id="description_alert">
                   Veuillez entrez la description du produit.
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('stock_Produit', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('stock_Produit', ['class': 'form-control']) }}
                <p class="help-block">(requis)</p>
                <div class="alert alert-warning" id="stock_alert">
                     veuillez entrez le nombre de produit en stock.
                </div>
            </div>
        </div>

        <div class="control-group">
            {{ form.label('id_Categorie', ['class': 'control-label']) }}
            <div class="controls">
                {{ form.render('id_Categorie', ['class': 'form-control']) }}
                <p class="help-block">(requis)</p>
                <div class="alert alert-warning" id="categorie_alert">
                    Veuillez entrez la catégorie du produit
                </div>
            </div>
        </div>

       <!--  image du produit -->

       

       
        <div class="form-actions">
            {{ submit_button('Modifier', 'class': 'btn btn-primary') }}
            <p class="help-block">En vous inscrivant, vous acceptez les termes d'utilisations et de confidentialités.</p>
        </div>

    </fieldset>
</form>
