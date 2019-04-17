package metodo_secante;
import java.util.Scanner;

public class Formula {
	
	public void diametroE(double t, int T, double Øi){
        double e=0;
        e=(int)(-t+Math.round(Math.pow(e,4))+(16*(T/Math.PI)));
    }
        
  public static void main(String[] args) {
      //pedir 5 valores
      // F(Øe)=-JØe^4+16(T/pi)Øe+Øi^4J ---> buscar el diametro exterior
      //xi+1= xi-F(xi)(xi-1-xi)/F(xi-1)-(F(xi))
	  
      double t=0;  //esfuerzo
      int T=0;     // par
      double Øi=0;  //diametro interior
      String X1="";  
      String X2="";
      Scanner z=new Scanner(System.in);
      
      System.out.println("ingrese el t: ");
      t=z.nextDouble();
      System.out.println("ingrese el T: ");
      T=z.nextInt();
      System.out.println("ingrese el Øi: ");
      Øi=z.nextDouble();
      System.out.println("ingrese el X1: ");
      X1=z.next();
      System.out.println("ingrese el X2: ");
      X2=z.next();
    
    
     //imprimir los datos de la funcion
     Formula s=new Formula();
     System.out.println("el resultado es "+s);
  }
}