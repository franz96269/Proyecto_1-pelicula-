--Base de datos peliculas
Create database peliculas_excell;
use peliculas_excell;
Create table pelicula (
    id int primary key auto_increment,
    Pelicula varchar (40) not null,
    Director varchar (25) not null,
    Anio varchar (4) not null,
    Protagonistas varchar (60) not null,
    Genero varchar (30) not null);

explain pelicula;

