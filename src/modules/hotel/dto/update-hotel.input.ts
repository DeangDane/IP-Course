import { Field, InputType, Int, PartialType } from '@nestjs/graphql';
import { CreateHotelInput } from './create-hotel.input';

// hotel/dto/update-hotel.input.ts
@InputType()
export class UpdateHotelInput extends PartialType(CreateHotelInput) {
  @Field(() => Int)
  id: number;
}
