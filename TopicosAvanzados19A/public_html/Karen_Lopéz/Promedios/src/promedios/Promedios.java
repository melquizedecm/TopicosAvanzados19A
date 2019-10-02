package promedios;
import java.util.Scanner;

public class Promedios {

    //inicializara las variables que se utilizaran, llamando al teclado.
    public static void inicializar (double calificaciones[], String alumno[], Scanner sc){
        for (int i=0;i<calificaciones.length;i++){
            System.out.println("Ingrese la calificacion: ");
            calificaciones[i]=sc.nextInt();
        }
    }
    
    //realizara la suma del primedio e indicara si el grupo esta o no aparobado
    public static double promedio(double calificaciones[]){
        double prom, suma=0;
        for(int i=0;i<calificaciones.length;i++)
            suma+=calificaciones[i];
            prom=suma/calificaciones.length;
//si es mayor o igual a 70 el grupo estara aprobado, pero si es menor a 70 entonces el grupo estará reprobado
                 if(prom>=70){
        System.out.print("\n--> Estan aprobados");
            }else{
        System.out.print("\n--> Estan reprobados");
     }
        return prom;
    }
    
    //imprimira las calificaciones ingresadas y el promedio grupal
    public static void imprimir(double calificaciones[], double promedio){
        System.out.printf("%-15s %n", "\ncalificacion ingresada");
        for(int i=0;i<calificaciones.length;i++){
            //imprimira el listado de las calificaciones ingresadas con anterioridad
            System.out.printf("%-15s %n", calificaciones[i]);
        }
        //imprime el promedio del grupo
        System.out.println("\nEl promedio grupal es: "+promedio);
    }
    
    //principal
    public static void main(String[] args) {
        Scanner sc=new Scanner(System.in);
        double calificaciones[]; //guarda las calificaciones
        double promedio; //guardara el promedio del grupo
        String alumno[]; //se guarda el nombre del alumno
        int n;
        //solicita el numero de alumnos de los cuales ingresaran las calificaciones
        System.out.println("ingrese el numero de alumnos para ingresar calificaciones: ");
        n=sc.nextInt();
        //las calificaciones se guardan en un arreglo que contiene la n
        calificaciones=new double[n];
        //la variable alumno convierte en String la cantidad ingresada para poder enviarlo a otra variable
        alumno=new String[n];
        
        //inicializara las variables mientras que al correr el programa se ejecutara la impresion de las funciones
        inicializar(calificaciones, alumno, sc);
        promedio=promedio(calificaciones);
        imprimir (calificaciones, promedio);
    }
}
