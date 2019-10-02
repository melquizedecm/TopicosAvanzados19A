package media;
/**
 *
 * @author Key
 */
import java.util.*;
public class Media {
	static double numero;
	static double media;
	static double varianza;
	static double desviacion;
	static int n;

	public static void main (String[] args){
		Scanner K=new Scanner(System.in);
		System.out.println("cantidad de numeros a calcular: ");
		n=K.nextInt();

		double numeros []=new double [n];
		for(int i=0; i<n;i++){
			System.out.println("ingrese el numero: ");
			numeros[i]=K.nextDouble();
		}
		//para calcular la media 
		double suma=0;
		for(double i: numeros){
			suma = suma+i;
		}
		media=suma/n;
		System.out.println("la media es:"+media);

		//para calcular la varianza
		double sumatoria;
		for(int i=0;i<n;i++){
			sumatoria=Math.pow(numeros[i]-media,2);
			varianza=varianza+sumatoria;
		}
		varianza=varianza/(n-1);

		//para calcular la desviacion

		desviacion=Math.sqrt(varianza);
		double redondeo=Math.rint(desviacion*100)/100;
		System.out.println("la desviacion estandar es: "+desviacion);
	}
}