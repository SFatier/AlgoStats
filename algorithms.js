function tri_a_bulles(t){
	Permut=true;
	cpt=count(t)-1;
	while(Permut) {
		for(i=0;i<count(t);i++) alert(t[i]);
		Permut=false;
		for(i=0;i<cpt;i++) {
			if(t[i]>t[i+1]) {
				temp=t[i];
				t[i]=t[i+1];
				t[i+1]=temp;
				Permut=true;
			}
		}
		cpt--;
		for(i=0;i<count(t);i++);
	}
	result = array();
	result[0]= t;
	result[1]= cpt; //nb de cycle 
	return result; //tab de tab avec nb cycle en result[1]
}
function tri_fusion (tab, debut, fin){
	cpt = 0;
	if(debut<fin) {
		milieu = round((debut+fin)/2,0, PHP_ROUND_HALF_DOWN);
		tri_fusion(tab, debut, milieu);
		tri_fusion(tab, milieu+1, fin);
		fusionner(tab, debut, milieu, fin);
		cpt++;
	}
	result = array();
	result[0]= tab;
	result[1]= cpt; //nb de cycle 
	return result; //tab de tab avec nb cycle en result[1]
}

function tri_par_insertion(t)
{	 
	c = 0;
	for(i=1;i<t.length;i++) 
	{ 
    	mem=t[i]; 
    	pos=i-1; 
    	while((pos>=0) && (t[pos]>mem))
    	{ 
      		t[pos+1]=t[pos];
      		pos--; 
      		c++;
    	} 
   		t[pos+1]=mem; 
    }

    result = new Array();
    result[0] = t;
    result[1] = c;
    return (result);
}

function tri_par_selection(t){
	cpt=count(t);
	for(i=0;i<cpt-1;i++) {
		min=i;
		for(j=i+1;j<cpt;j++) {
			if(t[j]<t[min]) min=j;
		}
		if(min!=i) {
			temp=t[min];
			t[min]=t[i];
			t[i]=temp;
		}
	}

<<<<<<< HEAD
	result = array();
=======
	return result; 	 //tab de tab avec nb cycle en result[1]
}

function tri_shell(t){
	n=0;
	cpt=t.length;
	while(n<cpt) { n=3*n+1};
	while(n!=0) {
		n=parseInt(n/3);
		for(i=n;i<cpt;i++) {
			mem=t[i];
			j=i;
			while(j>(n-1) && t[j-n]>mem) {
				t[j]=t[j-n];
				j=j-n;
			}
			t[j]=mem;
		}
	}
	console.log(t);
	result = new Array();
>>>>>>> 821a15c685b942f96eb59fc8ddb76effb1e96441
	result[0]= t;
	result[1]= cpt; //nb de cycle 

	return result; 	 //tab de tab avec nb cycle en result[1]
<<<<<<< HEAD
}
function tri_peigne(tableau){
	gap = 20;
=======
}


function tri_fusion (tab){
	cpt=tab.length;
	j = 0;
	if( cpt <= 1 ){
		return;	
	} 
    else
    {
        tab1 = new Array;
        tab2 = new Array;
        for( i = 0; i < cpt; i++) {
            if( i < cpt / 2 )
            {
                tab1[j] = tab[i];
            }
            else
            {
            	tab2[j] = tab[i];
            }
            j++;
        }
    	  // Appel la fonction tri récursivement
        tri_fusion(tab1);
        tri_fusion(tab2);
        // Fusionne les petits tableaux en plus grand
        fusionner(tab1,tab2,tab);
    }
    result = new Array();
	result[0]= tab;
	result[1]= cpt; //nb de cycle 
	return result; //tab de tab avec nb cycle en result[1]
}

function fusionner ( tab1, tab2, $tab )
{
        i = 0;
        i1 = i2 = 0;
        // Fusionne les petits tableaux dans le plus grand
        while( i1 < tab1.length && i2 < tab2.lenth ) {
            if( tab1[ i1 ] < tab2[ i2 ] ) // On compare ici
                tab[ i ] = tab1[ i1++ ];
            else
                tab[ i ] = tab2[ i2++ ];
            i++;
        }
        // S'il reste des éléments dans un des 2 tableaux mais pas dans l'autre
        while( i1 < tab1.length ) {
            tab[ i ] = tab1[ i1++ ];
            i++;
        }
        while( i2 < tab2 ) {
            tab[ i ] = tab2[ i2++ ];
            i++;
        }
}

function tri_peigne(tableau)
{
	gap = tableau.length;
>>>>>>> 821a15c685b942f96eb59fc8ddb76effb1e96441
	permutation = true;

	cpt = 0; //declaration nb cycle

	while (permutation || gap > 1)
	{
		permutation = false;
		gap = gap / 1.3;
		if (gap<1) { gap=1 ; }
		for (en_cours=0;en_cours<20-gap;en_cours++) 
		{
			if (tableau[en_cours]>tableau[en_cours+gap])
			{
				permutation = true;
				temp = tableau[en_cours];
				tableau[en_cours] = tableau[en_cours+gap];
				tableau[en_cours+gap] = temp;
			}
			cpt++; //nb cycle
		}
	}
	result = new Array();
	result[0]= tableau;
	result[1]= cpt; //nb de cycle 
	return result; //tab de tab avec nb cycle en result[1]
}

<<<<<<< HEAD
	return result; 	 //tab de tab avec nb cycle en result[1]
}
=======
>>>>>>> 821a15c685b942f96eb59fc8ddb76effb1e96441
/*function tri_rapide(array){
 	if(tableau.length < 2 ) {
        return tableau;
    }
    left = right = array( );
    tableau = [];
    pivot_key  = Object.keys( tableau );
    pivot  = tableau.shift();
    foreach( tableau as k => v ) {
        if( v < pivot )
            left[k] = v;
        else
            right[k] = v;
    } 
    return array_merge(static::triRapide(left), array(pivot_key => pivot), static::triRapide(right));
}
<<<<<<< HEAD
function tri_shell(t){
	n=0;
	cpt=count(t);
	while(n<cpt) n=3*n+1;
	while(n!=0) {
		n=(int)(n/3);
		for(i=n;i<cpt;i++) {
			mem=t[i];
			j=i;
			while(j>(n-1) && t[j-n]>mem) {
				t[j]=t[j-n];
				j=j-n;
			}
			t[j]=mem;
		}
	}
	
	result = array();
	result[0]= t;
	result[1]= cpt; //nb de cycle 

	return result; 	 //tab de tab avec nb cycle en result[1]
}
?>
=======
>>>>>>> 821a15c685b942f96eb59fc8ddb76effb1e96441
*/