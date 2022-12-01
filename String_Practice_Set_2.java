public class String_Practice_Question_2{
    public static void main(String args[]){
        // Problem 2 -> REPLACE SPACES WITH UNDERSCORE IN THE GIVEN STRING 

        String str = "Aashutosh is a good boy";
        System.out.print("String without replace: ");
        System.out.println(str);
        System.out.println("Replaced spaces with underscore");
        System.out.print("String after replace: ");
        String replace_1 = str.replace(" ", "_");
        System.out.println(replace_1);
    }
}