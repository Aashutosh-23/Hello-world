import java.util.Scanner;
// Switch statements can happen with strings, integer, characters etc...     
public class Switch_Case_1 {
    public static void main(String args[]) {
        // System.out.println("Enter your age: ");
        // Scanner sc = new Scanner(System.in);
        // int age = sc.nextInt();
        String name = "Seema and";
        switch (name) {
            case "Aashutosh":
                System.out.println("Your name is Aashutosh");
                break;

            case "Seema":
                System.out.println("Your name is Seema");
                break;

            case "Aaradhya":
                System.out.println("Your name is Aaradhya");
                break;
        default:
            System.out.println("Your name is not registered");

        }

    }
}