public class Break_Statement{
    public static void main(String args[]){
        System.out.println("BREAK AND CONTINUE STATEMENTS");
        for(int i = 1; i<=10; i++){
            System.out.print("The Java course is nice: ");
            System.out.println(i);
            if(i == 2){
                System.out.println("Exiting the loop");
                continue;   // BRINGS TO THE NEXT ITERATION
                // break;   // BREAKS THE ITERATION
            }
        }
    }
}