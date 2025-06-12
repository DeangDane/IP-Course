import { Field, InputType, Int } from '@nestjs/graphql';

@InputType()
export class CreateBookingInput {
  @Field()
  startDate: Date;

  @Field()
  endDate: Date;

  @Field()
  price: number;

  @Field(() => Int)
  hotelId: number;
}
