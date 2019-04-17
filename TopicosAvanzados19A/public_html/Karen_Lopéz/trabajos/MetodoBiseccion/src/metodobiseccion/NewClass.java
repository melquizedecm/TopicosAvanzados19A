package metodobiseccion;
import java.lang.Math;
import java.io.*;

public class NewClass {
    public static void main(String args[]){
	NewClass Proyecto = new NewClass();
        Proyecto.MetodoBiseccion();
	}
 public double lee(){
		double num;
		try{
			InputStreamReader isr = new InputStreamReader (System.in);
			BufferedReader br = new BufferedReader(isr);
			String sdato;
			sdato = br.readLine();
			num = Double.parseDouble(sdato);
		}
		catch(IOException ioe){
			num=0.0;
		}
		return num;
		}

	//para  leer un entero
	public int leeint(){
		int num;
		try{
			InputStreamReader isr = new InputStreamReader (System.in);
			BufferedReader br = new BufferedReader(isr);
			String sdato;
			sdato = br.readLine();
			num = Integer.parseInt(sdato);
		}
		catch(IOException ioe){
			num=0;
		}
		return num;
		}
        
    public void MetodoBiseccion(){
		double a;
		double b;
		double tol;
		System.out.println("\t\t\t\"METODO DE BISECCION\"");
		System.out.println("Extremo Izquierdo: ");
		a=lee();
		System.out.println("Extremo Derecho: ");
		b=lee();
		System.out.println("Tolerancia: ");
		tol=lee();
		double c;
		do{
		c=(a+b)/2.0;
		if(((c*c-5)*(a*a-5))<0){
			b=c;
		}
		else{
			a=c;
		}
	    }while(Math.abs(a-b)>tol);
	    System.out.println("La raiz es: "+c);			
	}
}