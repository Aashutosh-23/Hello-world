public class Enhanced_Switch {
    public static void main(String args[]) {

        int age = 34;
        switch (age) {
            case 34 -> {
                System.out.println("Your age is 34");
                System.out.println("Full adult");
            }
            case 23 -> System.out.println("Your age is 23");
            case 12 -> System.out.println("Your age is 12");
            case 45 -> System.out.println("Your age is 45");
            default -> System.out.println("This is default");
        }
        System.out.println("This is the enhanced switch");
    }
}
