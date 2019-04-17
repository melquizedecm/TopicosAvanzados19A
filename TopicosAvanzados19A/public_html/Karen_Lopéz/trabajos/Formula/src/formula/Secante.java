/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package formula;
public class Secante {
public static void main(String[] args) {
NewClass f1=new NewClass(1,5);
double r=f1.calcRaiz();
System.out.println("Raiz="+r);
System.out.println("Comprobación=>");
System.out.println((2*r*r)-5);

}

}