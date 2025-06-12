import { ObjectType, Field, Int, Float } from '@nestjs/graphql';

@ObjectType()
export class Booking {
  @Field(() => Int)
  id: number;

  @Field()
  startDate: Date;

  @Field()
  endDate: Date;

  @Field(() => Int)
  hotelId: number;

  @Field(() => Float)
  price: number;

  @Field()
  isCheckedIn: boolean;
}
