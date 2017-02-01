function tri_a_bulles(t){
	Permut=true;
	cpt = (t.length) - 1;
	while(Permut) {
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
	}
	console.log(t);
	result =  new Array();
	result[0]= t;
	result[1]= cpt; //nb de cycle 
	return result; //tab de tab avec nb cycle en result[1]
}


function tri_par_insertion(t)
{	 
	cpt = t.length;
	for(i=1;i<cpt;i++) 
	{ 
    	mem=t[i]; 
    	pos=i-1; 
    	while((pos>=0) && (t[pos]>mem))
    	{ 
      		t[pos+1]=t[pos];
      		pos--; 
    	} 
   		t[pos+1]=mem; 
    }

    result = new Array();
    result[0] = t;
    result[1] = i;
    return (result);
}

function tri_par_selection(t){
	cpt=t.length;
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
	console.log(t);
	result = new Array();
	result[0]= t;
	result[1]= cpt; //nb de cycle 

	return result; 	 //tab de tab avec nb cycle en result[1]
}

/*function tri_shell(t){
	n=0;
	cpt=t.length;
	while(n<cpt) n=3*n+1;
	while(n!=0) {
		n=(n/3);
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
	result[0]= t;
	result[1]= cpt; //nb de cycle 

	return result; 	 //tab de tab avec nb cycle en result[1]
}*/


/*function tri_fusion (tab, debut, fin){
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

function tri_peigne(tableau){
	gap = 20;
	permutation = true;
	en_cours;

	cpt = 0; //declaration nb cycle

	while (permutation || gap>1){
		permutation = false;
		gap = gap / 1.3;
		if (gap<1) gap=1;
		for (en_cours=0;en_cours<20-gap;en_cours++) {
			if (tableau[en_cours]>tableau[en_cours+gap]){
				permutation = true;
				// on echange les deux elements
				temp = tableau[en_cours];
				tableau[en_cours] = tableau[en_cours+gap];
				tableau[en_cours+gap] = temp;
			}
			cpt++; //nb cycle
		}
	}

	result = array();
	result[0]= t;
	result[1]= cpt; //nb de cycle 

	return result; 	 //tab de tab avec nb cycle en result[1]
}*/
/*function tri_rapide(array){
    if( count( array ) < 2 ) {
        return array;
    }
    left = right = array( );
    reset( array );
    pivot_key  = key( array );
    pivot  = array_shift( array );
    //foreach( array as k => v ) {
        if( v < pivot )
            left[k] = v;
        else
            right[k] = v;
    }
    return array_merge(tri_rapide(left), array(pivot_key => pivot), tri_rapide(right));
}
?>
*/