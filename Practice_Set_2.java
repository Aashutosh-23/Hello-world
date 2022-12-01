import java.util.Scanner;
public class Practice_Question_2 {
    public static void main(String args[]){
        Scanner sc = new Scanner(System.in);
        System.out.println("Enter marks 1 out of 100: ");
        float a = sc.nextFloat();
        System.out.println("Enter marks 2 out of 100: ");
        float b = sc.nextFloat();
        System.out.println("Enter marks 3 out of 100: ");
        float c = sc.nextFloat();
        System.out.println("Enter marks 4 out of 100: ");
        float d = sc.nextFloat();
        System.out.println("Enter marks 5 out of 100: ");
        float e = sc.nextFloat();
        System.out.println("Enter marks 5 out of 100: ");
         
        float total_marks = (a+b+c+d+e);


        System.out.println("Your total marks are: ");
        System.out.println(total_marks);
        System.out.println("and your percentage is: ");
        float percentage = (total_marks/400) * 100;
        System.out.println(percentage);
    }
}
