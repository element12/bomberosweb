// search index for WYSIWYG Web Builder
var database_length = 0;

function SearchPage(url, title, keywords, description)
{
   this.url = url;
   this.title = title;
   this.keywords = keywords;
   this.description = description;
   return this;
}

function SearchDatabase()
{
   database_length = 0;
   this[database_length++] = new SearchPage("https://bomberosmadridb31.com/index.html", "Bomberos Madrid", "bomberos madrid capacitaciones bomberos madrid cundinamarca colombia bomberos madrid inspeciones numeros de emergencia de bomberos primeros auxilio empresas madrid bomberos cuerpo de bomberos b31 bomberos madrid ", "Pagina web del cuerpo de bomberos  Madrid Cundinamarca ");
   this[database_length++] = new SearchPage("https://bomberosmadridb31.com/Contacto.html", "Contacto", "bomberos madrid capacitaciones bomberos madrid cundinamarca colombia bomberos madrid inspeciones numeros de emergencia de bomberos primeros auxilio empresas madrid bomberos cuerpo de bomberos b31 bomberos madrid ", "Pagina web del cuerpo de bomberos  Madrid Cundinamarca ");
   this[database_length++] = new SearchPage("https://bomberosmadridb31.com/Galeria.html", "Untitled Page", "bomberos madrid capacitaciones bomberos madrid cundinamarca colombia bomberos madrid inspeciones numeros de emergencia de bomberos primeros auxilio empresas madrid bomberos cuerpo de bomberos b31 bomberos madrid ", "Pagina web del cuerpo de bomberos  Madrid Cundinamarca ");
   this[database_length++] = new SearchPage("https://bomberosmadridb31.com/Inspecciones-tecnicas.html", "Inspecciones Tecnicas", "bomberos madrid capacitaciones bomberos madrid cundinamarca colombia bomberos madrid inspeciones numeros de emergencia de bomberos primeros auxilio empresas madrid bomberos cuerpo de bomberos b31 bomberos madrid ", "Pagina web del cuerpo de bomberos  Madrid Cundinamarca ");
   this[database_length++] = new SearchPage("https://bomberosmadridb31.com/Escuela-de-capacitaciones.html", "Escuela de capacitaciones", "bomberos madrid capacitaciones bomberos madrid cundinamarca colombia bomberos madrid inspeciones numeros de emergencia de bomberos primeros auxilio empresas madrid bomberos cuerpo de bomberos b31 bomberos madrid ", "Pagina web del cuerpo de bomberos  Madrid Cundinamarca ");
   this[database_length++] = new SearchPage("https://bomberosmadridb31.com/otros-servicios.html", "BomberosMadrid", "bomberos madrid capacitaciones bomberos madrid cundinamarca colombia bomberos madrid inspeciones numeros de emergencia de bomberos primeros auxilio empresas madrid bomberos cuerpo de bomberos b31 bomberos madrid ", "Pagina web del cuerpo de bomberos  Madrid Cundinamarca ");
   return this;
}
