package metodo_secante;
import java.util.Scanner;
import static javafx.scene.input.KeyCode.T;

public class Formula {
    
 public void diametroE(){
          double e = 0;
          double Øe = 0;
          e=(-J(Math.pow(Øe,4))+(16(T/Math.PI))Øe+((Math.pow(Øi,4)J)));
       }
 
     public static void main(String[] args) {
         //pedir 5 valores
         // F(Øe)=-JØe^4+16(T/pi)Øe+Øi^4J ---> buscar el diametro exterior
         //xi+1= xi-F(xi)(xi-1-xi)/F(xi-1)-(F(xi))
         int J=0;
         int T=0;
         double Øi=0;
         String Xi=""; 
         String XI="";
         Scanner z=new Scanner(System.in);
         
         System.out.println("ingrese el J: ");
         J=z.nextInt();
         System.out.println("ingrese el T: ");
         T=z.nextInt();
         System.out.println("ingrese el Øi: ");
         Øi=z.nextDouble();
         System.out.println("ingrese el Xi: ");
         Xi=z.next();
         System.out.println("ingrese el Xi-1: ");
         XI=z.next();
     }

    private int J(double pow) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}