select * from employe;
select noemp, nom, prenom, titre
from employe;

select noemp, nom, prenom, titre
from employe
where titre='RÉprÊsënTant';


select noemp, nom, prenom, titre
from employe
where titre='secretaire' or prenom='olaf';

select titre, count(*), min(salaire), max(salaire), avg(salaire)
from employe
group by titre;


select employe.nodep, employe.nom, dept.nodept, dept.nom
from dept 
left join employe on employe.nodep=dept.nodept;







select e.nodep, e.nom, d.nodept, d.nom
from dept as d
left join employe as e on e.nodep=d.nodept;

-- sous requêtes
select * from employe where titre in 
    (
        select titre 
        from employe 
        where prenom='odile'
    );




-- auto jointures
select salarie.prenom, chef.prenom
from employe as salarie
join employe as chef on salarie.nosup=chef.noemp;


