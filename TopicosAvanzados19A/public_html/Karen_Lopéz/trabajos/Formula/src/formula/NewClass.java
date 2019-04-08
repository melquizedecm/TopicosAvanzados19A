/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package formula;

/**
 *
 * @author jesus
 */
public class NewClass {
double x[]=new double[50];
double x0,x1;
double r;
double e=10;

NewClass(double x0, double x1)
{
// se definen los valores iniciales de x1 y x2
x[0]=x0;
x[1]=x1;

}

double f(double x)
{

// se define una ecuación de segundo grado a resolver
double y;
y=(2*x*x)-5;
return y;

}
double calcRaiz()
{
//este método define el proceso para calcular la raiz
int i=1;
while(e>0.001)
{
x[i+1]=x[i]-( (f(x[i])*(x[i-1]-x[i]))/(f(x[i-1])-f(x[i])) );

e=Math.abs((x[i+1]-x[i])/(x[i+1]))*100;
System.out.println(x[i+1]+"\t"+e+"\n");
i++;

} 
return x[i];
}    
}